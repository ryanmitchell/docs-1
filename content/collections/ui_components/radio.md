---
id: 861b7fb8-b271-4777-b882-327eae5f01df
blueprint: ui_component
title: Radio
intro: Radio buttons are used to select a single option from a list of options.
---
```component
<ui-radio-group name="favorite" label="Choose your favorite Star Wars movie">
    <ui-radio label="A New Hope" value="ep4" />
    <ui-radio label="Empire Strikes Back" value="ep5" />
    <ui-radio label="Return of the Jedi" value="ep6" />
</ui-radio-group>
```

## With descriptions
Radio buttons can have descriptions below their labels.

```component
<ui-radio-group name="favorite" label="Choose your favorite meal">
    <ui-radio label="Breakfast" description="The morning meal. Should include eggs." value="breakfast" checked />
    <ui-radio label="Lunch" description="The mid-day meal. Should be protein heavy." value="lunch" />
    <ui-radio label="Dinner" description="The evening meal Should be delicious." value="dinner" />
</ui-radio-group>
```

## Disabled items

Items can be disabled by using the `disabled` prop.

```component
<ui-radio-group name="favorite" label="Choose your favorite Star Wars movie">
    <ui-radio label="A New Hope" value="ep4"/>
    <ui-radio label="Empire Strikes Back" value="ep5" />
    <ui-radio label="Return of the Jedi" value="ep6" />
    <ui-radio disabled label="the Force Awakens" value="ep7" />
    <ui-radio disabled label="The Last Jedi" value="ep8" />
    <ui-radio disabled label="The Rise of Skywalker" value="ep9" />
</ui-radio-group>
```
