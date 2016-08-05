# config valid only for current version of Capistrano
lock '3.4.1'

set :stages, ["staging", "production"]
set :default_stage, "staging"

set :application, 'smartamusements'
set :repo_url, 'git@github.com:tinbot-development/smartamusements.git'

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
set :deploy_to, '/var/www/smartamusements.tinbotdevelopment.com'
set :keep_releases, 1

namespace :deploy do

  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

end
