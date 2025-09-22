---
title: Building Widgets
template: page
updated_by: 42bb2659-2277-44da-a5ea-2f1eed146402
updated_at: 1569264107
id: 5900c99f-89b9-4ee3-834c-cb1b070146e4
---

## Generating a widget

You can generate a widget with a console command:

```shell
php please make:widget LocalWeather
```

This will automagically create a class in `app/Widgets` and a Blade view in `resources/views/widgets`.

The PHP class is responsible for returning the view and the view is responsible for what the user sees on the page.

```php
// app/Widgets/LocalWeather.php

<?php  
  
namespace App\Widgets;  
  
use Statamic\Widgets\Widget;  
  
class LocalWeather extends Widget  
{
    public function html()  
    {  
        return view('widgets.local_weather');  
    }  
}
```
```blade
<ui-widget title="LocalWeather">  
    <div class="px-4 py-3">  
        <p>👋 Hello world!</p>  
    </div>  
</ui-widget>
```

The [`<ui-widget>`](/ui-components/widget) component accepts a `title` and an optional `icon` prop. 

## Configuring

Widgets can be added to the dashboard by modifying the `widgets` array in the `config/statamic/cp.php` file.

``` php
// config/statamic/cp.php
'widgets' => [
  'getting_started',
  [ // [tl! focus:start]
      'type' => 'local_weather',
      'width' => 100,
  ], // [tl! focus:end]
],
```
