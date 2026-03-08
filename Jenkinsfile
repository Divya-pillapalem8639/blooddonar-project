pipeline {
    agent any

    stages {

        stage('Clone Repository') {
            steps {
                git 'https://github.com/Divya-pillapalem8639/blooddonar-project.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t blooddonor .'
            }
        }

        stage('Run Container') {
            steps {
                sh 'docker run -d -p 80:80 blooddonor'
            }
        }
    }
}
