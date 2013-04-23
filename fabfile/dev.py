# import os
# from fabric.api import cd
from fabric.api import lcd
# from fabric.api import sudo
# from fabric.api import run
# from fabric.api import show
from fabric.api import get
# from fabric.api import put
from fabric.colors import green
#from fabric.colors import cyan
from fabric.colors import red
from fabric.api import local
from fabric.api import task
from fabric.api import roles
from fabric.api import execute
from fabric.api import settings
# import css as _css

@task
def setup():
    with settings(warn_only=True):
        # Create directories
        local('echo "create database centurion;" | mysql -uroot')
        local('/home/vagrant/www/Centurion/bin/zf.sh check install')
        local('/home/vagrant/www/Centurion/bin/zf.sh db install local')

