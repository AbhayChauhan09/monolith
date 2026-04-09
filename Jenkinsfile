pipeline {
    agent { label 'agent' }

    stages {

        stage('Clone Code') {
            steps {
                git branch: 'main', url: 'https://github.com/AbhayChauhan09/monolith.git'
            }
        }

        stage('Deploy with Docker Compose') {
            steps {
                sh 'docker-compose down || true'
                sh 'docker-compose up -d'
            }
        }
    }

    post {
        success {
            emailext (
                to: 'contraabhay24@gmail.com',
                subject: 'Build SUCCESS: ${JOB_NAME}',
                body: 'Build completed successfully!'
            )
        }
        failure {
            emailext (
                to: 'contraabhay24@gmail.com',
                subject: 'Build FAILED: ${JOB_NAME}',
                body: 'Build failed. Check Jenkins logs.'
            )
        }
    }
}
