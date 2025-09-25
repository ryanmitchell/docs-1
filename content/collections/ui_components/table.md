---
id: 17a7fdc0-06e7-4fb8-a045-2b23f33d9fad
blueprint: ui_component
title: Table
intro: A responsive table component for displaying structured data in rows and columns.
---
```component
<ui-table>
    <ui-table-columns>
        <ui-table-column>Product</ui-table-column>
        <ui-table-column>Stock</ui-table-column>
        <ui-table-column class="text-right">Price</ui-table-column>
    </ui-table-columns>
    <ui-table-rows>
        <ui-table-row>
            <ui-table-cell>Mechanical Keyboard</ui-table-cell>
            <ui-table-cell>
                <ui-badge color="green" pill>In Stock</ui-badge>
            </ui-table-cell>
            <ui-table-cell class="text-right font-semibold text-black">$159.00</ui-table-cell>
        </ui-table-row>
        <ui-table-row>
            <ui-table-cell>Ergonomic Mouse</ui-table-cell>
            <ui-table-cell>
                <ui-badge color="red" pill>Out of Stock</ui-badge>
            </ui-table-cell>
            <ui-table-cell class="text-right font-semibold text-black">$89.00</ui-table-cell>
        </ui-table-row>
        <ui-table-row>
            <ui-table-cell>4K Monitor</ui-table-cell>
            <ui-table-cell>
                <ui-badge color="yellow" pill>Low Stock</ui-badge>
            </ui-table-cell>
            <ui-table-cell class="text-right font-semibold text-black">$349.00</ui-table-cell>
        </ui-table-row>
    </ui-table-rows>
</ui-table>
```

## Structure

The table component uses a simplified structure where `ui-table-columns` automatically creates the header row, eliminating the need for a separate row component in the header, and `ui-table-rows` automatically creates the body rows.
