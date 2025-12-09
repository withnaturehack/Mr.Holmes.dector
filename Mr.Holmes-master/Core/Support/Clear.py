# ORIGINAL karzo: karzo (hackwithnature)
# AUTHOR: karzo (hackwithnature)
# Copyright (C) 2025-26 hackwithnature <withnaturehack@gmail.com>
# License: GNU General Public License v3.0

import os

Windows = "nt"


class Screen:

    def Clear():
        os.system("cls" if os.name == Windows else "clear")
