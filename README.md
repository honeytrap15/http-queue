# simple-file-server

## start

```bash
$ docker run --env PORT=8000 -p 8000:8000 -it honeytrap15/simple-file-server
```

## usage

POST method will put file which has content of send data.
And return content of file.

```bash
$ curl -X POST http://localhost:8000/foo -d "bar"
bar
```


GET method will return content of file put by POST method.

```bash
$ curl -X GET http://localhost:8000/foo
bar
```
