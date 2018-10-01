## about.choxue.com source files
PHP with internationalization in the `lang` folder. 

### Deployment

- Runs on AWS Lightsail
- SSH or SFTP with Filezilla into server directly and copy paste the modified files (use the private key)
- Server root directory: `/opt/bitnami/apache2/htdocs`
- Empty the `/lang` folder so that locale-specific words are updated

`ssh -i LightsailDefaultPrivateKey-ap-northeast-1.pem bitnami@54.65.201.229`
