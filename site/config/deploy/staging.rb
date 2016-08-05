server 'tinbotdevelopment.com', user: 'root', roles: %w{web app}

set :ssh_options, {
    keys: %w(/Users/macequina/.ssh/id_rsa)
}