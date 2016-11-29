from fabric.api import local


def deploy():
    local("node-sass themes/mg/scss -o themes/mg/static/css")
    local("make github")
