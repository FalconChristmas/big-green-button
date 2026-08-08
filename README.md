# Big Green Button

An [FPP](https://github.com/FalconChristmas/fpp) (Falcon Player) plugin that adds a single-button status-page control for starting a playlist — with an optional repeat toggle. Useful for a physical "big green button" wired to FPP (e.g. via GPIO) to kick off a show on demand.

## Features

- Adds a **Big Green Button** panel to the FPP status page
- Dropdown to select any playlist from your `playlists` directory
- **Repeat** checkbox to loop the selected playlist
- **Start** button fires the playlist via the FPP `api/command` endpoint (`Start Playlist`)

## Installation

1. In FPP, go to **Content Setup → Plugin Manager**
2. Find **Big Green Button** in the list and install it
3. Restart `fppd`

## Usage

1. Open the FPP status page — a **Big Green Button** panel appears in the sidebar
2. Select a playlist from the dropdown
3. Check **Repeat** if you want it to loop
4. Click **Start**

This is commonly paired with a physical button wired to a GPIO input, using FPP's GPIO input triggers to call the same playlist-start action without touching the UI at all.

## Reporting Issues

File bugs at [github.com/FalconChristmas/big-green-button/issues](https://github.com/FalconChristmas/big-green-button/issues).

## License

See the [FalconChristmas/fpp](https://github.com/FalconChristmas/fpp) project for overall licensing terms.
