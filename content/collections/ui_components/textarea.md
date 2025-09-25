---
id: 530cc8ca-2a36-4c58-8ad6-43366e1fe2f3
blueprint: ui_component
title: Textarea
intro: Simple multi-line text input.
---
```component
<ui-textarea label="Message" />
```


## Disabled
Prevent users from interacting with the textarea by disabling it.

```component
<ui-textarea disabled text="Can't touch this." label="Lyrics" />
```


## Elastic
Allow the textarea to adjust its size based on the content.
```component
<ui-textarea elastic rows="2" text="If you catch a chinchilla in Chile, and cut off its beard willy-nilly, you can honestly say, you made on that day, a Chilean chinchilla's chin chilly.">
```


## Fixed Height
Set the height of the textarea by passing the `rows` prop.
```component
<ui-textarea rows="2" label="Description" />
```


## Placeholder
Add a placeholder to the textarea.
```component
<ui-textarea placeholder="Dear diary..." label="Message" />
```


## Resize Controls
If you want to restrict the user from resizing the textarea, you can use the <code>resize="none"</code> prop.

```component
<ui-textarea resize="vertical" rows="1" placeholder="Resize vertical"/>
<ui-textarea resize="both" rows="1" placeholder="Resize both"/>
<ui-textarea resize="horizontal" rows="1" placeholder="Resize horizontal"/>
<ui-textarea resize="none" rows="1" placeholder="Resize none"/>
```

