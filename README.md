## Installation

### Initialize Submodule

    git submodule add git@github.com:aerialls/MeetingBundle.git src/Synergie/MeetingBundle

### Application Kernel

Add MeetingBundle to the `registerBundles()` method of your application kernel:

    public function registerBundles()
    {
        return array(
            new Synergie\MeetingBundle\MeetingBundle(),
        );
    }


