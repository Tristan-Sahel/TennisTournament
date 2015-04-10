set :application, "Tennis App"
set :domain,      "tennis-app.com"
set :deploy_to,   "/var/www/tennis-app.com"

set :repository,  "file:///Users/deployer/sites/tennis-app"
set :scm,         :git
set :deploy_via	  :copy
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3
set  :use_sudo,       false

set :deploy_via, :rsync_with_remote_cache

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL
