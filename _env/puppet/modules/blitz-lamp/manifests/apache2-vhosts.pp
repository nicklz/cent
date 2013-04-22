class blitz-lamp::apache2-vhosts {

    file{'cent.vhost':
            path => '/etc/apache2/sites-available/cent',
            ensure => present,
            require => Package[apache2],
            source => "puppet:///modules/blitz-lamp/apache2/cent.vhost",
            owner => root,
            group => root;
    }

    file{'/etc/apache2/sites-enabled/000-cent':
            ensure => link,
            target => '/etc/apache2/sites-available/cent',
            require => [Package['apache2'], File['cent.vhost']],
            notify  => Service['apache2'],
            owner => root,
            group => root;
    }
}