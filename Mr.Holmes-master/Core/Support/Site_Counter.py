# ORIGINAL karzo: karzo (hackwithnature)
# AUTHOR: karzo (hackwithnature)
# Copyright (C) 2025-26 hackwithnature <withnaturehack@gmail.com>
# License: GNU General Public License v3.0

import json

class Counter:
    
    @staticmethod
    def Site(filename):
        f = open(filename,)
        data = json.loads(f.read())
        counter = 0
        for sites in data:
            for data1 in sites:
                counter = counter + 1 
        return counter
