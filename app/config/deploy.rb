set :application, "TennisTournament"
set :deploy_to,   "/var/www/TennisTournament"
set :domain,	  "62.4.23.211"
set :app_path,    "app"

set :repository,  "https://github.com/tsahel/TennisTournament.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3

set :dump_assetic_assets, true
set :use_composer, true
set :update_vendors, true

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor", app_path + "/sessions"]

set :writable_dirs,       ["app/cache", "app/logs", "app/sessions"]
set :webserver_user,      "www-data"
set :permission_method,   :acl
set :use_set_permissions, true    

ssh_options[:forward_agent] = true
default_run_options[:pty] = true
 
before 'symfony:assetic:dump', 'bower:install'
 
namespace :bower do
    desc 'Run bower install'
    task :install do
      capifony_pretty_print "--> Installing bower components"
      invoke_command "sh -c 'cd #{latest_release} && bower install'"
      capifony_puts_ok
    end
end

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL
