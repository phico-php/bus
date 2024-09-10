# Bus

Command Bus implementation for Phico

## Installation

Using composer:

```sh
composer require phico/bus
```

## Usage

Pass a command to the bus

```php
$cmd = new Command(...);
bus()->handle($cmd);
```

### Command results

Use the `HasResult` trait to get the result of the command using `$cmd->result()`.

```php
class CommandWithResult
{
    use HasResult;

    public function handle(): void
    {
        // some logic here

        $this->result = 'ok';
    }
}
```

```php
$cmd = new CommandWithResult(...);
bus()->send($cmd);
$result = $cmd->result();
```

### Async commands

Use the `IsQueued` trait to process the command later.

```php
class QueuedCommaned
{
    use IsQueued;

    public function handle(): void
    {
        // some logic excuted asyncronously
    }
}
```

## Issues

If you discover any bugs or issues with behaviour or performance please create an issue, and if you are able a pull request with a fix.

Please make sure to update tests as appropriate.

For major changes, please open an issue first to discuss what you would like to change.

## License

[BSD-3-Clause](https://choosealicense.com/licenses/bsd-3-clause/)
