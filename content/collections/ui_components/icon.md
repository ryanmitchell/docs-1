---
id: f50e3993-7f40-4a05-9c6f-f0712d24db3a
blueprint: ui_component
title: Icon
template: ui-component
intro: You may use many icons from the streamline icon set.
view_model: App\ViewModels\UIIcons
---
```component flex justify-center space-x-5
<ui-icon name="bell" />
<ui-icon name="ai-spark" />
<ui-icon name="web" />
```

## Sizing Icons

The best way to size your icons is with a simple Tailwind class.

```component flex justify-center
<ui-icon name="ai-spark" class="size-8" />
```

## All Icons

<div class="grid grid-cols-4 md:grid-cols-6 2xl:grid-cols-10 gap-4 ui-component-example">
{{ icons }}
  <div class="bg-gray-50 dark:bg-gray-800 rounded-lg py-4 px-2 flex flex-col items-center gap-3 text-center">
    <ui-icon name="{{ value }}" class="size-6"></ui-icon>
    <span class="text-2xs text-gray-500">{{ value }}</span>
  </div>
{{ /icons }}
</div>

## Custom sets
You may register additional icon sets and then reference them from the component with the `set` prop.

```component
<ui-icon name="academic-cap" set="heroicons" />
```

Register them using the registry API using a glob import. This will include all the icons in the directory in your JS bundle.

```js
import { registerIconSet } from '@statamic/ui';

registerIconSet('heroicons', import.meta.glob(
    './path/to/heroicons/*.svg',
    { query: '?raw', import: 'default' }
));
```

If you have a situation where you need custom icons that cannot be included in the bundle (for example, how Statamic itself allows you to bring your own icons), you can provide them as strings.

```js
import { registerIconSetFromStrings } from '@statamic/ui';

registerIconSetFromStrings('heroicons', {
    'academic-cap': '<svg>...</svg>',
    'adjustments-horizontal': '<svg>...</svg>',
});
```
