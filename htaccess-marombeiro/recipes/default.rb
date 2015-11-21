cookbook_file "/srv/www/marombeiro/current/.htaccess" do
  source ".htaccess"
  mode '0755'
  action :create
  owner 'deploy'
  group 'www-data'
end
