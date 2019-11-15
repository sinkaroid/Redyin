#!/bin/bash
#sin

RED=$(tput setaf 1) 
GREEN=$(tput setaf 2) 

echo -e "${RED}

  _________              .__  .__                       _______       .___      
 /   _____/ _____  ____  |  | |  |   ____   ____   ____ \   _  \    __| _/____  
 \_____  \ /     ||__  \ |  | |  | _/ __ \ /    \_/ ___\/  /_\  \  / __ |/ __ \ 
 /        \  Y Y  \/ __ \|  |_|  |_\  ___/|   |  \  \___\  \_/   \/ /_/ \  ___/ 
/_______  /__|_|  (____  /____/____/\___  >___|  /\___  >\_____  /\____ |\___  >
        \/      \/     \/               \/     \/     \/       \/      \/    \/ 
"

echo -e "${GREEN}"
PS3='select or "3" to exit: '
options=("bytag" "byquery" "Quit")
select opt in "${options[@]}"
do
    case $opt in
        "bytag")
            cd bin;python bytag.py
            ;;
        "byquery")
            cd bin;python byquery.py
            ;;
       
        "Quit")
            break
            ;;
        *) echo "invalid option $REPLY";;
    esac
done