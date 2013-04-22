node default{
    Exec { path => "/usr/bin:/usr/sbin:/bin:/sbin:/usr/local/bin:/usr/local/sbin" }
    
    stage { first: before => Stage[main] }
    stage { last: require => Stage[main] }
    
    include blitz-lamp
    include blitz-lamp::apache2
    include blitz-lamp::apache2-modules
    include blitz-lamp::apache2-vhosts
    include blitz-lamp::python
    include blitz-lamp::ruby
    include blitz-lamp::vim
    include blitz-lamp::zend
    include blitz-lamp::php5
    include blitz-lamp::git
    include blitz-lamp::mysql5
    include blitz-lamp::configuration-vagrant
}