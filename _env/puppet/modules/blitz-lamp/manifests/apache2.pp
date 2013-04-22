class blitz-lamp::apache2{
    package{'apache2':
        ensure => installed
    }

    service{ "apache2":
        ensure     => running,
        enable     => true,
        hasrestart => true,
        require    => Package['apache2']
    }

    file{'cent.crt':
            path => '/home/vagrant/cent.crt',
            ensure => present,
            require => Package[apache2],
            source => "puppet:///modules/blitz-lamp/apache2/cent.crt",
            notify  => Service['apache2'];

        'cent.csr':
            path => '/home/vagrant/cent.csr',
            ensure => present,
            require => Package[apache2],
            source => "puppet:///modules/blitz-lamp/apache2/cent.csr",
            notify  => Service['apache2'];

        'cent.key':
            path => '/home/vagrant/cent.key',
            ensure => present,
            require => Package[apache2],
            source => "puppet:///modules/blitz-lamp/apache2/cent.key",
            notify  => Service['apache2'];

        'apache.envvars':
            path => '/etc/apache2/envvars',
            ensure => present,
            require => Package[apache2],
            source => "puppet:///modules/blitz-lamp/apache2/envvars",
            owner => root,
            group => root,
            notify  => Service['apache2'],
            mode => 0644;
    }
}