# Claude Code Instructions for AHS2003 Project

## CRITICAL RULES
- **NEVER** include Claude Code advertisements in commit messages
- **NEVER** include "Generated with Claude Code" footers
- **NEVER** include "Co-Authored-By: Claude" lines
- Write clean, professional commit messages without any AI attribution

## Project Overview
- **Site**: AHS Class of 2003 Time Machine (ahs2003.com)
- **Purpose**: Class reunion portal for Aberdeen High School Class of 2003
- **Developer**: Ross Dynamics LLC (rossdynamics.com)
- **School Colors**: Blue and Gold
- **Mascot**: Bobcats

## Architecture
- **Backend**: PHP
- **Database**: MySQL (ahs2003 for prod, ahs2003_dev for dev)
- **Hosting**: Hostinger
- **CDN/DNS**: Cloudflare
- **Deployment**: SFTP via VS Code extension (Natizyskunk)

## Environments
- **Production**: https://ahs2003.com
- **Development**: https://development.ahs2003.com

## Current State (as of 2026-02-21)
- Landing page complete with dual-mode design
- **2003 Mode**: Nostalgic fixed-width (1280px) design with:
  - Cursor sparkle trails, crosshair cursor
  - Blinking text, rainbow animations, spinning icons
  - Marquee (horizontal + vertical), star dividers
  - Web ring, retro digit counter, flame text effects
  - "GEOCITIES CERTIFIED" footer trash
- **You're Old Mode**: Clean modern 2024 design with:
  - Full-width sections, glassmorphism nav
  - Inter + Playfair Display fonts
  - Card-based layout, smooth hover animations
  - Fully responsive
- Mode toggle at top, remembers preference via localStorage

## Key Files
- `index.php` - Main landing page with dual-mode CSS/JS
- `includes/config.php` - Database and environment config (gitignored)
- `includes/config.example.php` - Template for config
- `.vscode/sftp.json` - SFTP deployment profiles
- `notes/nostalgix-time-machine.md` - Design reference (ICQ, MySpace, AIM aesthetics)
- `notes/vision.txt` - Design philosophy document
- `donotupload/credentials.txt` - Sensitive credentials (gitignored)

## Database Credentials
- User: ahsadmin
- Databases: ahs2003 (prod), ahs2003_dev (dev)
- Stored in: donotupload/credentials.txt

## Yearbook Images
- Downloaded from youryearbooks.com (years 2000-2003)
- Stored in: assets/yearbook/[year]/
- ~1,471 images total

## Pending Features
- Cloudflare Turnstile (bot protection)
- Classmate Directory
- Yearbook Archive viewer
- Memory Wall
- Photo Galleries (Then & Now)
- Chat Room
- Guestbook
- Reunion Info section
- User authentication/profiles

## Design Philosophy
- Front of house: Authentic 2003 experience
- Back of house: Modern techniques
- "Same soul, different container" for responsive
- See notes/vision.txt for full philosophy
