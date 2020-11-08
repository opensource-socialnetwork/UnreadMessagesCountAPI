# UnreadMessagesCountAPI
A example of extension of WebServices.  This example will show count for unread messages based on each user.

## Endpoint
    CURL https://www.yourwebsite.com/api/v1.0/unread_mesages_count_custom?api_key_token=<token>&guid=<user guid>
    
## Response

```
{
    "merchant": "Open Source Social Network",
    "url": "https:\/\/local.opensource-socialnetwork.org\/",
    "time_token": 1604857576,
    "payload": [
        {
            "total": 2,
            "message_from": 3
        },
        {
            "total": 1,
            "message_from": 2
        }
    ],
    "code": "100",
    "message": "Request successfully executed"
}
```
