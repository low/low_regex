# Low Regex for Craft

Adds a preg_replace filter to Twig.

## Usage

`{{ var | regex([pattern], [replacement]) }}`

## Example

`{{ entry.website | regex('#^https?://(www\.)?(.*?)/?$#', '$2') }}`