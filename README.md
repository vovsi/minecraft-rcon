# Minecraft RCON PHP Client
[![Latest Version on Packagist](https://img.shields.io/packagist/v/vovsi/minecraft-rcon.svg)](https://packagist.org/packages/vovsi/minecraft-rcon)

A lightweight PHP client around an existing Minecraft RCON client, enriched with high-level **resource classes** for common in-game actions.

This package is designed to provide a **clean, structured** interface for executing RCON commands on a Minecraft server using PHP.

## Requirements

This package requires:

- PHP **8.4** or higher
- Minecraft server with RCON enabled
- Composer

## Installation

Install via Composer:

```bash
composer require vovsi/minecraft-rcon
```

## Example Usage

```php
use Vovsi\MinecraftRcon\Rcon;
use Vovsi\MinecraftRcon\resources\ItemResource;
use Vovsi\MinecraftRcon\dto\item\GiveDto;

$rcon = new Rcon('127.0.0.1', 25575, 'supersecret');
$itemResource = new ItemResource($rcon);

$dto = new GiveDto(
    username: 'Notch',
    item: 'diamond',
    amount: 64
);

$itemResource->give($dto);
```

## Resource Structure

All logic is grouped by resources (src/resources), each encapsulating commands related to a specific domain (items, players, server control, etc.).

## License

MIT – drop some diamonds, not licenses 💎
