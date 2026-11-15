pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', 
                    url: 'https://github.com/ankurk-git-hub/php-student-app.git'
            }
        }

        stage('Deploy to Web Server') {
            steps {
                sh '''
                    echo "Deploying PHP application..."
                    sudo cp -f index.php success.php about.php /var/www/html/
                    sudo chown -R www-data:www-data /var/www/html/
                    sudo chmod -R 755 /var/www/html/
                    echo "Deployment completed successfully!"
                '''
            }
        }
    }

    post {
        success {
            echo "PHP App deployed successfully on server!"
        }
        failure {
            echo "Deployment failed. Check console output."
        }
    }
}
