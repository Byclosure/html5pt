# -*- coding: utf-8 -*-
require 'bc-cap-recipes'

set :application, "html5pt"
set :repository,  "set your repository location here"

set :scm, :git

set :repository, "git@github.com:Byclosure/html5pt.git"
set :branch, case rails_env
when :production then "production"
when :staging then "master"
else raise("Unknown deploy environment: '#{rails_env}'")
end
set :deploy_via, :remote_cache

namespace :deploy do
  task :finalize_update do
    run "[ ! -d #{release_path}/public/wp-content/uploads/ ] && ln -s #{shared_path}/system #{release_path}/public/wp-content/uploads"
  end
  task :set_environment do
  end
  task :restart do
  end
end

