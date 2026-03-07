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
                sh 'docker build -t blooddonor-app .'
            }
        }

        stage('Run Container') {
            steps {
                sh 'docker rm -f blooddonor || true'
                sh 'docker run -d -p 80:80 --name blooddonor blooddonor-app'
            }
        }
    }
}
