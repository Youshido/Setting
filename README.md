# Setting Bundle
 Bundle used to set default parameters for everything

##Installation:
### Import in your config.yml:
``` yaml
twig:
    #...
    
    globals:
        defaults: @ysettings
```

### Import to admin structure.yml file:
This config use only in pair with [YoushidoAdminBundle](https://github.com/Youshido/AdminBundle)
``` yaml
imports:
    #...
    
    - { resource: ../../vendor/youshido/settings/Resources/config/admin/structure.settings.yml }
```

##Use it:
### Use in controller: 
``` php
$this->get('ysettings')->getParameter($key, $defaultValue);
```

### Use in twig: 
``` twig
<title>{{ defaults.parameter(key) }}</title>
```