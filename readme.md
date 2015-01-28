# Low Regex for Craft

Adds a preg_replace filter to Twig. No obsolete, as Craft now boasts a [native regex replace filter](http://buildwithcraft.com/docs/templating/filters#replace).

## Usage

`{{ var | regex([pattern], [replacement]) }}`

## Example

`{{ entry.website | regex('#^https?://(www\.)?(.*?)/?$#', '$2') }}`
