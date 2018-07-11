<?php

return [
    'alipay' => [
        'app_id'         => '2016091800541267',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvp+btdbjAansice4RYF45k0uVdAA0Q/7sL8mz9IR6EKZ970/Mu1GPcd2icsg+dZJi2sUj4/jw3wL5NlpA86rxD2oqysOaGqVVvQiHeZnAOWPSkjIGP6S7h7StrCzA+E5+EkVqeO8TvTDLR8YLJqdYTeh1PEibE5NjrQPlYd9kJHgJlbAnk0G6t/n9qeSMhTibKKaylzQPMVFlvJLx7dL5Sa6ipUWfHo4sfr7Q7QTlZelbf+a7hLQy9sTPGEY7px7S8f4IBNGegTWjPtE36ICmk5mJrbU41bRnUx+xu73cMHnLut6JDoRiG2zSpS3TJA3iFMk/ekuRe8oRR+/snzLrwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA2ecAAn3JnvAgBNOGCj13qlM3W4XK7NWnrH+ibzstfrrNsC8WkO2+MiSdtfV2cVAESgpJ0Q5PxYVYXT6YAJQzqu+MAytDWsSahk0D/tIzx4PQihA1EHd03+SMfRyIy/PREz+ygopfD+ab7weEE+ZafwbE8Ls1q3GnFvVyU7Mu2PQhWoZWf8rBLqZsaeVU9d38aCFlGKkeJmy6dYr0asWLw8rI+M2rl053kLlCKQao7V1dmHiSXKGOlU75O065ZOQw+n9RJnnX53uSaKbefGtz4f7aIEmcWylwlNh+ffTVwHI3c5/PHGd15PPrvnbrNiR3aJPU4XkbJT4qw8Zq/0h1PwIDAQABAoIBAEiKyMwLiGXrVx2ENemO0RnZHmLPxeDWuD2LOE6Div/XvMZcxsx0+Y7D9eUv1MCgfO0RQ8XfV9tQKzzPq9b1f8X2fcxISOIc9bykQyJAZJCVZ4WvI5tZyYUIF2VHbJtJjl80I3+mBUPL6DnJbMUbOSF05XenO5TZ/2B7UhZfXsdG0cvbTpilTadK6XHiFbZchob6yUiet8BvGytoSjpnHOyeEj59rbuhDAkKKUiMa/iJOGuHGWrHxunVuHTwk90Hi7BPgZhEgEXaNEVkyZskU2ahLK8Garh9RlloUVxmHuYmTS/5WaUr+31j7PnJpezE/Te+LZBHkYZJ598s8fPWjIECgYEA8mb9vyf8BtWKnEs7wA9xpxuibYXDoWGUC7dRem+04Kzhty5cqpws7LLwQzgX3awvV0u7thcq2hL7GPEnNKE3YtHBXgAgEguantqOqhOj+OxtwtVVE2K/e1ksl3YfrA9e8CHoOBJKLIQVg9wk3NRh0NuVwwK8Io0ryEeoD57XsZ8CgYEA5iAtlNUlLSQXImiir+e8Cinp8w06qvAt/UHVQPi55VBefNEJWRtvjNwp4wHbGWNVZAqFF5LR5qOMnZbO9/3DLyw/fO0pKqsb5hD69ApfcgHVSzL7jftM5WiORzx/lmMUscL8Qi1dsgZFI7FWfqp5Mw/NyHvb5xbkt2AQ67BQ2GECgYBHZWxhrD5AKQ9df49Gv4XDKZGK3rZDR0FavhDilhpZfrIwyRgELGHTCdVYhyIIaZm8BZNxS5uUhbitnQHmL4Hnuk5RCIpppj9RgKA6mfRW8hRWKY2YWyJ5C0fmCKXFgPV+lw4VzdVJDVJk9ydoX6m74aFXwet15cy6fdiTWT7AkwKBgQDCvOo1r2VlXMwi9w7s8ppCs5NhdYl3DAau8R3ofFK7hhZfY3mYqUntloXvrytcwZ2KKgjUmQ79MNuWo/8DBwA8FCKpsfwLOn9CYo4rI/f+/yQjHcKYNNeurprwF3cUqUXi49Eao09NjlbFzJUYXWRw3GfUx1Ogq9Pihe3rtOnFIQKBgQDxrx3MujbSV2wZ+roEKIc7J4XwZ/ovg8L/ghuGGmlPtRmhC4LZ30aPu8Gm/nfmbgKyaFXi93accK8K3vRzEWvOEEbcW4wCC+/HU8GQ6SpJqxNGzb+eo4Vrh/tW5KknjKD9yeHD81LPURYi2bfvzDYXASu6g+pv/ZjgSPCcH3a7pA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log')
        ]
    ],

    'wechat' => [
        'app_id'      => 'wx2be80c13b94e5200',
        'mch_id'      => '1337313801',
        'key'         => 'ASFH5464HS464S646S5448Ta46f4a6s5',
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log')
        ]
    ]
];