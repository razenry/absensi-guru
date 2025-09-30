# Holidays API Spec

## Get All Holidays

Endpoint: `GET /api/holidays`

Headers

-   Authorization: Bearer {token}

Success Response:

```json
{
    "data": [
        {
            "id": 1,
            "name": "Hari Lebaran",
            "date": "2026-03-20T00:00:00.000000Z",
            "description": "Libur Lebaran",
            "is_recurring": true,
            "is_active": true,
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Hari Minggu",
            "date": "2026-03-29T00:00:00.000000Z",
            "description": "Hari Libur",
            "is_recurring": true,
            "is_active": true,
            "deleted_at": null
        }
    ],
    "links": {
        "first": "http://localhost:8000/api/holidays?page=1",
        "last": "http://localhost:8000/api/holidays?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "page": null,
                "active": false
            },
            {
                "url": "http://localhost:8000/api/holidays?page=1",
                "label": "1",
                "page": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "page": null,
                "active": false
            }
        ],
        "path": "http://localhost:8000/api/holidays",
        "per_page": 15,
        "to": 2,
        "total": 2
    }
}
```

Error Response:

```json
{
    "message": "Unauthenticated."
}
```

## Get Holiday Detail

Endpoint: `GET /api/holidays/{id}`

Headers

-   Authorization: Bearer {token}

Success Response:

```json
{
    "data": {
        "id": 1,
        "name": "Hari Lebaran",
        "date": "2026-03-20T00:00:00.000000Z",
        "description": "Libur Lebaran",
        "is_recurring": true,
        "is_active": true,
        "deleted_at": null
    }
}
```

Error Response:

```json
{
    "message": "Unauthenticated."
}
```

```json
{
    "message": "Data with id {id} not found"
}
```

## Create Holiday

Endpoint: `POST /api/holidays`

Headers

-   Authorization: Bearer {token}

Request Body

```json
{
    "name": "Hari Lebaran",
    "date": "2026-03-20T00:00:00.000000Z",
    "description": "Libur Lebaran",
    "is_recurring": true,
    "is_active": true
}
```

Success Response:

```json
{
    "message": "Successfully Create new Holiday",
    "data": {
        "id": 1,
        "name": "Hari Lebaran",
        "date": "2026-03-20T00:00:00.000000Z",
        "description": "Libur Lebaran",
        "is_recurring": true,
        "is_active": true
    }
}
```

Error Response:

```json
{
    "message": "Unauthenticated."
}
```

```json
{
    "message": "The name field is required. (and 4 more errors)",
    "errors": {
        "name": [
            "The name field is required.",
            "Maximum of 255 characters allowed."
        ],
        "date": ["The date field is required."],
        "description": ["The description field is required."],
        "is_recurring": ["The is recurring field is required."],
        "is_active": ["The is active field is required."]
    }
}
```

## Update Holiday

Endpoint: `PUT /api/holidays/{id}`

Headers

-   Authorization: Bearer {token}

Request Body

```json
{
    "name": "Hari Lebaran",
    "date": "2026-03-20T00:00:00.000000Z",
    "description": "Libur Lebaran",
    "is_recurring": true,
    "is_active": true
}
```

Success Response:

```json
{
    "message": "Successfully Update Holiday with id {id}",
    "data": {
        "id": 1,
        "name": "Hari Lebaran",
        "date": "2026-03-20T00:00:00.000000Z",
        "description": "Libur Lebaran",
        "is_recurring": true,
        "is_active": true
    }
}
```

Error Response:

```json
{
    "message": "Unauthenticated."
}
```

```json
{
    "message": "Data with id {id} not found"
}
```

```json
{
    "message": "The name field is required. (and 4 more errors)",
    "errors": {
        "name": [
            "The name field is required.",
            "Maximum of 255 characters allowed."
        ],
        "date": ["The date field is required."],
        "description": ["The description field is required."],
        "is_recurring": ["The is recurring field is required."],
        "is_active": ["The is active field is required."]
    }
}
```

## Delete Holiday

Endpoint: `DELETE /api/holidays/{id}`

Headers

-   Authorization: Bearer {token}

Success Response:

```json
{
    "message": "Holiday deleted successfully."
}
```

Error Response:

```json
{
    "message": "Unauthenticated."
}
```

```json
{
    "message": "Data with id {id} not found"
}
```

```json
{
    "message": "This holiday is active. Please deactivate it first."
}
```
