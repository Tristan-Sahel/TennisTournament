set :application, "TennisTournament"
set :domain,      "TennisTournament.com"
set :deploy_to,   "/var/www/TennisTournament"
set :app_path,    "app"

set :repository,  "git@github.com:tsahel/TennisTournament.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3

set :dump_assetic_assets, true
set :use_composer, true

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor", app_path + "/sessions"]

session:
    save_path: "%kernel.root_dir%/sessions/"

set :writable_dirs,       ["app/cache", "app/logs", "app/sessions"]
set :webserver_user,      "www-data"
set :permission_method,   :acl
set :use_set_permissions, true    

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL
