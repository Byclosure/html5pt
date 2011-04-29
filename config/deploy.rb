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
  end
  task :set_environment do
  end
  task :restart do
  end
end

