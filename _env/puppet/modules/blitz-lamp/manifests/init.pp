class blitz-lamp {
    package { 'curl':
        ensure => installed,
    }
    class{'blitz-lamp::apt-get-update': stage => first }
    class{'blitz-lamp::configuration-actions': stage => last }
}
