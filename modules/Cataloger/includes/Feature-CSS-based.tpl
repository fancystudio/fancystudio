<div class="feature_items">    {section name=numloop loop=$items}        <div class="feature_item"><a href="{$items[numloop].link}"><img src="{$items[numloop].image}" title="{$items[numloop].title}" alt="{$items[numloop].title}"/></a><br /><a href="{$items[numloop].link}">{$items[numloop].title}</a></div>    {/section}</div>