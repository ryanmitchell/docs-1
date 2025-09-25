---
id: 83a67772-b3b8-4f5a-9db8-e5a014f681e2
blueprint: ui_component
title: Tabs
template: ui-component
intro: Tabs are a way to organize content into different sections.
---
Tabs are useful for when you have a lot of content to show, but don't want to overwhelm the user with a single, monster page or component.

```component
<ui-tabs default-tab="tab1" class="w-full">
    <ui-tab-list>
        <ui-tab-trigger text="Shiny" name="tab1" />
        <ui-tab-trigger text="Happy" name="tab2" />
        <ui-tab-trigger text="People" name="tab3" />
    </ui-tab-list>
    <ui-tab-content name="tab1">
        <p class="py-8">Tab 1 content</p>
    </ui-tab-content>
    <ui-tab-content name="tab2">
        <p class="py-8">Tab 2 content</p>
    </ui-tab-content>
    <ui-tab-content name="tab3">
        <p class="py-8">Tab 3 content</p>
    </ui-tab-content>
</ui-tabs>
```

## Tab Indicator
You can have full control of the style of the tab indicator by using the `ui-tabs-indicator` component.

```component
<ui-tabs default-tab="tab1" class="text-center text-gray-700">
    <ui-tabs-list class="border-none! space-x-2!">
        <ui-tabs-trigger name="tab1" class="p-4! z-10">
            <ui-icon name="avatar" class="size-8" />
        </ui-tabs-trigger>
        <ui-tabs-trigger name="tab2" class="p-4! z-10">
            <ui-icon name="mail" class="size-8" />
        </ui-tabs-trigger>
        <ui-tabs-trigger name="tab3" class="p-4! z-10">
            <ui-icon name="cog" class="size-8" />
        </ui-tabs-trigger>
        <ui-tabs-indicator class="absolute left-0 z-0 h-full bg-gray-100 bottom-0 w-[var(--reka-tabs-indicator-size)] translate-x-[var(--reka-tabs-indicator-position)] translate-y-[1px] rounded-lg transition duration-300" />
    </ui-tabs-list>
    <ui-tabs-content name="tab1">
        <p>Tab 1 content</p>
    </ui-tabs-content>
    <ui-tabs-content name="tab2">
        <p>Tab 2 content</p>
    </ui-tabs-content>
    <ui-tabs-content name="tab3">
        <p>Tab 3 content</p>
    </ui-tabs-content>
</ui-tabs>
```
