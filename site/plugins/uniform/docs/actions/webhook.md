# Webhook Action

This action calls a remote webhook URL and can send form data to it.

## Example

This example calls the MailChimp API to add an email address to a list.

### Controller

```php
<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email_address' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
    ]);

    if (r::is('POST')) {
        $form->webhookAction([
            'url' => 'https://us6.api.mailchimp.com/3.0/lists/9e67587f52/members/',
            'json' => true,
            'params' => [
                'method' => 'POST',
                'data' => ['status' => 'pending'],
                'headers' => ['Authorization: Basic QWxhZGRpbjpPcGVuU2VzYW1l'],
            ],
        ]);
    }

    return compact('form');
};
```

### Template

```html+php
<form method="POST">
    <input name="email_address" type="email" value="<?php echo $form->old('email_address') ?>">
    <?php echo honeypot_field() ?>
    <?php echo csrf_field() ?>
    <input type="submit" value="Subscribe">
</form>
```

## Options

### url (required)

The url, the request should be sent to.

### params

Additional parameters for the request. See the [remote class of the Toolkit](https://github.com/getkirby/toolkit/blob/9ffaca5bab847fdac1cca5577a4c629152f1fb6d/lib/remote.php#L18) for all possible parameters. The `data` parameter will be merged with the form data.

### only

Array of form field names that the webhook request should be restricted to. Only the data of form fields specified in this array will be sent. This can be an empty array, too, in which case no form data will be sent at all.

### except

Array of form field names that should be excluded from the webhook request. Only the data of form fields not specified in this array will be sent.

### json

Set to `true` to send the request as `application/json`. The form data will be encoded in JSON in this case. By default the content type is `application/x-www-form-urlencoded`.
