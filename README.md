<div align="center">

<img width="650px" height="100px" src="Icon/Banner.png" alt="Mr.Holmes Banner">

[![GitHub Stars](https://img.shields.io/github/stars/hackwithnature/Mr.Holmes?style=for-the-badge&logo=github&color=yellow)](https://github.com/hackwithnature/Mr.Holmes/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/hackwithnature/Mr.Holmes?style=for-the-badge&logo=github&color=blue)](https://github.com/hackwithnature/Mr.Holmes/network)
[![Maintained](https://img.shields.io/badge/Maintained%3F-yes-green.svg?style=for-the-badge)](https://github.com/hackwithnature/Mr.Holmes/graphs/commit-activity)
[![License](https://img.shields.io/github/license/hackwithnature/Mr.Holmes?style=for-the-badge&color=orange)](LICENSE)
[![Repo Size](https://img.shields.io/github/repo-size/hackwithnature/Mr.Holmes?style=for-the-badge&color=purple)](https://github.com/hackwithnature/Mr.Holmes)
[![Languages](https://img.shields.io/github/languages/count/hackwithnature/Mr.Holmes?style=for-the-badge&color=red)](https://github.com/hackwithnature/Mr.Holmes)
[![Visitors](https://visitor-badge.laobi.icu/badge?page_id=hackwithnature.Mr.Holmes&style=for-the-badge)](https://github.com/hackwithnature/Mr.Holmes)

<h1>🔍 Mr.Holmes - Advanced OSINT Intelligence Tool</h1>

<p align="center">
  <strong>Professional Information Gathering & Reconnaissance Framework</strong>
</p>

<p align="center">
  🌐 Domain Intelligence | 👤 Username Research | 📱 Phone Lookup | 🔐 Email Verification | 🎯 Google Dorks
</p>

</div>

---

## 📖 About

**Mr.Holmes** is a comprehensive Open Source Intelligence (OSINT) tool designed for cybersecurity professionals, penetration testers, and researchers. It aggregates data from 165+ public sources to provide actionable intelligence on:

- 🌐 **Domain & Website Analysis** - WHOIS data, SSL certificates, reputation scoring
- 👤 **Username Reconnaissance** - Track digital footprints across 151+ platforms
- 📱 **Phone Number Investigation** - Carrier lookup, geolocation, validation
- 📧 **Email Verification** - Deliverability checks, domain validation
- 🎯 **Google Dorks** - Advanced search operators for targeted reconnaissance
- 🔌 **Port Scanning** - Network reconnaissance and service detection
- 🕵️ **People Search** - Aggregate information from multiple sources

### ✨ Key Features

- ✅ **151+ Website Support** - Instagram, GitHub, Twitter, TikTok, and more
- ✅ **Deep Profile Scraping** - Extract posts, locations, followers, and metadata
- ✅ **Proxy & Tor Support** - Maintain anonymity during investigations
- ✅ **Multi-Language** - English 🇬🇧, Italian 🇮🇹, French 🇫🇷
- ✅ **Web GUI** - Professional PHP-based interface with MySQL backend
- ✅ **Interactive Maps** - Visualize geolocation data with Leaflet.js
- ✅ **PDF Reports** - Generate professional investigation reports
- ✅ **File Transfer** - QR code-based mobile transfer system
- ✅ **Dark/Light/High-Contrast Themes** - Customize your experience

---

## ⚠️ DISCLAIMER

> **IMPORTANT:** This tool is designed for **educational and ethical research purposes only**. 
> 
> - This tool is **not 100% accurate** and may produce incomplete results
> - Unauthorized surveillance, stalking, or data collection may be **illegal** in your jurisdiction
> - Users must comply with all applicable laws and regulations
> - The developer assumes **no responsibility** for misuse or illegal activities
> - Always obtain proper authorization before conducting investigations

**Use responsibly and ethically.** 🛡️

---

## 📸 Screenshots

<div align="center">

### 🖥️ Desktop Interface

![Desktop Interface](Screenshot/Screenshot.png)

### 📱 Mobile Interface (Termux)

<img src="Screenshot/Termux.png" height="500px" width="350px" alt="Termux Interface" style="border-radius: 10px;">

</div>

---

## 🚀 Installation

<details>
<summary><b>🐧 Linux / macOS Installation</b></summary>

### Standard Installation
```bash
git clone https://github.com/hackwithnature/Mr.Holmes
cd Mr.Holmes
sudo apt-get update
sudo chmod +x install.sh
sudo bash install.sh
```

### Virtual Environment Installation (Recommended)
*Use this method if you encounter Python library conflicts*

```bash
git clone https://github.com/hackwithnature/Mr.Holmes
cd Mr.Holmes
sudo apt-get update
python3 -m venv .lib_venv
sudo chmod +x install.sh
sudo bash install.sh
source .lib_venv/bin/activate
pip3 install -r requirements.txt
python3 MrHolmes.py
```

</details>

<details>
<summary><b>🪟 Windows Installation</b></summary>

### Method 1: Git Installation
*If you have Git for Windows installed*

```cmd
git clone https://github.com/hackwithnature/Mr.Holmes
cd Mr.Holmes
Install.cmd
```

### Method 2: ZIP Installation
*If you downloaded the ZIP file*

```cmd
ren Mr.Holmes-master Mr.Holmes
cd Mr.Holmes
Install.cmd
```

> **⚠️ Note:** If Python and PHP don't install automatically, download them manually:
> - [Python](https://www.python.org/downloads/)
> - [PHP](https://www.php.net/downloads.php)

</details>

<details>
<summary><b>📱 Termux Installation (Android)</b></summary>

```bash
pkg install proot
git clone https://github.com/hackwithnature/Mr.Holmes
cd Mr.Holmes
proot -0 chmod +x install_Termux.sh
./install_Termux.sh
```

> **⚠️ Note:** Database GUI is **not available** on Termux

</details>

---

## 🎮 Usage

<table>
<tr>
<td width="50%">

### 🐧 Linux / macOS

**Standard:**
```bash
cd Mr.Holmes
sudo python3 MrHolmes.py
```

**Using Launcher:**
```bash
cd Mr.Holmes/Launchers
./Launcher.sh
```

**Virtual Environment:**
```bash
cd Mr.Holmes
source .lib_venv/bin/activate
python3 MrHolmes.py
```

</td>
<td width="50%">

### 🪟 Windows

**Standard:**
```cmd
cd Mr.Holmes
python MrHolmes.py
```

**Using Launcher:**
```cmd
cd Mr.Holmes\Launchers
Win_Launcher.exe
```

### 📱 Termux

```bash
cd Mr.Holmes
python3 MrHolmes.py
```

</td>
</tr>
</table>

---

## ⚙️ Configuration

### 🔑 API Key Setup

To enable **Email Verification** and **Website OSINT** features, you need a WhoisXMLAPI key:

1. **Get API Key:** [https://whois.whoisxmlapi.com](https://whois.whoisxmlapi.com)
2. **Configure:**
   ```bash
   cd Mr.Holmes
   python3 MrHolmes.py
   # Select option: (4) Configuration Settings
   # Enter your API key when prompted
   ```
3. **Manual Configuration:** Edit `Configuration/Configuration.ini`
   ```ini
   [Settings]
   Api_Key = YOUR_API_KEY_HERE
   ```

### 📂 Configuration Files

| File | Purpose | Location |
|------|---------|----------|
| 🔐 API Settings | WhoisXML API Key | `Configuration/Configuration.ini` |
| 🎨 GUI Theme | Dark/Light/High-Contrast | `GUI/Theme/Mode.json` |
| 👤 Login Credentials | Database access | `GUI/Credentials/Users.json` |
| 🌍 Language | English/Italian/French | `GUI/Language/Language.json` |

---

## 📚 Resources

- 📖 **Documentation:** [GitHub Pages](https://hackwithnature.github.io/Mr.Holmes/Pages/versions.html)
- 🔖 **Version History:** Check `RELEASES.md`
- 🛡️ **Security Policy:** Check `SECURITY.md`

---

## 🎨 Customization

<details>
<summary><b>🌓 GUI Theme Configuration</b></summary>

### Theme Options
Edit `GUI/Theme/Mode.json`:

```json
{
    "Color": {
        "Background": "Light"
    }
}
```

**Available Themes:**
- 🌕 `Light` - Light Mode
- 🌗 `Dark` - Dark Mode  
- ⚫ `High-Contrast` - High Contrast Mode

</details>

<details>
<summary><b>👤 Login Credentials Setup</b></summary>

### Enable/Disable Database Login
Edit `GUI/Credentials/Login.json`:

```json
{
    "Database": {
        "Status": "Active"
    }
}
```

Options: `Active` / `Deactive`

### Configure User Accounts
Edit `GUI/Credentials/Users.json`:

```json
{
    "Users": [
        {
            "Username": "Admin",
            "Password": "Qwerty123"
        }
    ]
}
```

> 🔐 **Default Credentials:**  
> Username: `Admin`  
> Password: `Qwerty123`

</details>

<details>
<summary><b>🌍 Language Configuration</b></summary>

Edit `GUI/Language/Language.json`:

```json
{
    "Language": {
        "Preference": "English"
    }
}
```

**Available Languages:**
- 🇬🇧 English
- 🇮🇹 Italiano
- 🇫🇷 Français

</details>

---

## 📦 Version Information

**Current Version:** `T.G.D-1.0.4`

---

## 🎯 Advanced Features

### 🔐 Report Encoding & Decoding
Secure your investigation reports with built-in encryption:
- 🔒 **Encode** reports for confidential storage
- 🔓 **Decode** reports when needed
- 🛡️ Protect sensitive OSINT data

### 🧠 Hypothesis Generation
AI-powered insights based on social media presence:
- 📊 Analyze activity across multiple platforms
- 🎯 Identify potential hobbies and interests
- 👤 Build comprehensive subject profiles
- ⚠️ *Note: Results are probabilistic, not definitive*

### 📧 Stealth Email Lookup
Investigate email addresses without alerting targets:
- ✅ Check email presence on social platforms
- 🔍 Discover associated services
- 🥷 Completely passive reconnaissance

### 📊 Interactive Graphs
Visualize relationships and connections:

<div align="center">

![Graph Example](Screenshot/Graph_Test.png)

*Create visual schemas for information scheduling and relationship mapping*

</div>

### 🗺️ Interactive Maps
Geolocation visualization powered by [Leaflet.js](https://leafletjs.com):

<div align="center">

![Map Example](Screenshot/Map_Test.png)

*Plot locations and track geographic patterns*

</div>

### 🎯 Advanced Google Dorks
Powerful search operators for targeted research:
- 🎬 Search for Videos, Audio, Images
- 📅 Date-specific searches: `1998/01/01`
- 📆 Date range queries: `1998/01/01-2020/12/31`

<div align="center">

| Single Search | Date Range Search |
|:-------------:|:-----------------:|
| ![Dorks 1](Screenshot/Dorks.png) | ![Dorks 2](Screenshot/Dorks2.png) |

</div>

### 📄 PDF Report Generation
Convert investigations to professional PDF documents:

<div align="center">

<img src="Screenshot/Dark_Pdf.png" height="400px" width="400px" alt="PDF Report Example">

**Available Themes:** 🌕 Light | 🌗 Dark | ⚫ High-Contrast

</div>

### 📱 QR Code File Transfer
Seamlessly transfer reports to mobile devices:

<div align="center">

<img src="Screenshot/File-Transfer.jpg" height="500px" width="300px" alt="File Transfer Interface">

*Scan QR code to download reports directly to your phone*

</div>

---

## 🎨 Theme Gallery

<div align="center">

### 🌗 Dark Mode

![Dark Mode Desktop](Screenshot/Dark_Mode.png)

<img src="Screenshot/Dark.jpg" height="500px" width="300px" alt="Dark Mode Mobile">

### 🌕 Light Mode

![Light Mode Desktop](Screenshot/Light_Mode.png)

<img src="Screenshot/Light.jpg" height="500px" width="300px" alt="Light Mode Mobile">

### ⚫ High-Contrast Mode

![High-Contrast Desktop](Screenshot/High-Contrast_Mode.png)

<img src="Screenshot/High-Contrast.jpg" height="490px" width="300px" alt="High-Contrast Mobile">

</div>

---

## 📊 Statistics & Analytics

<div align="center">

### ⭐ Stargazers Over Time

[![Stargazers over time](https://starchart.cc/hackwithnature/Mr.Holmes.svg)](https://starchart.cc/hackwithnature/Mr.Holmes)

</div>

---

## 🙏 Credits & Acknowledgments

### 🗺️ Interactive Maps
- Powered by [Leaflet.js](https://leafletjs.com)

### 🎨 Icons & Assets
- Site icons from [IconFinder](https://www.iconfinder.com/)
- All credits to their respective creators

---

## 📜 License

This project is licensed under the **GNU General Public License v3.0**

```
Copyright (C) 2025-26 hackwithnature
```

See the [LICENSE](LICENSE) file for full details.

---

## 👨‍💻 Author

<div align="center">

### karzo (hackwithnature)

[![GitHub](https://img.shields.io/badge/GitHub-hackwithnature-181717?style=for-the-badge&logo=github)](https://github.com/hackwithnature)
[![Email](https://img.shields.io/badge/
      
        Email-withnaturehack@gmail.com
        
          
        
      
    -D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:withnaturehack@gmail.com)

**Made with ❤️ in Italy 🇮🇹**

</div>

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](https://github.com/hackwithnature/Mr.Holmes/issues) or submit a pull request.

---

## ⭐ Show Your Support

If you find this project useful, please consider giving it a ⭐ on GitHub!

---

## 📞 Support

- 📖 Read the [Documentation](https://hackwithnature.github.io/Mr.Holmes/Pages/versions.html)
- 🐛 Report bugs via [GitHub Issues](https://github.com/hackwithnature/Mr.Holmes/issues)
- 💬 Join discussions in the [Discussions](https://github.com/hackwithnature/Mr.Holmes/discussions) section
- 📧 Contact: [
      
        
      
        
      
        
      
        withnaturehack@gmail.com
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    ](mailto:
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        withnaturehack@gmail.com
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    
        
          
        
      
    )

---

<div align="center">

**Mr.Holmes** - *Your Digital Detective for OSINT Investigations* 🔍

[![Made with Python](https://img.shields.io/badge/Made%20with-Python-3776AB?style=for-the-badge&logo=python&logoColor=white)](https://www.python.org/)
[![Made with PHP](https://img.shields.io/badge/Made%20with-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Powered by MySQL](https://img.shields.io/badge/Powered%20by-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)

</div>
