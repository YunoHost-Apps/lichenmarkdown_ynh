#!/usr/bin/env bash
#rsync -avzh -e "ssh -i /home/notplants/.ssh/do_rsa2" /home/notplants/computer/projects/thimble.commoninternet.net/ root@147.182.177.135:/srv/thimble.commoninternet.net/
rsync -avzh -e "ssh -i /home/notplants/.ssh/do_rsa3" /home/notplants/computer/projects/lichen-markdown/lichenmarkdown_ynh/conf/test3.conf np@b1.net:/etc/nginx/conf.d/lm.commoninternet.net.d/lichenmarkdown.conf

#ssh -tt -i /home/notplants/.ssh/do_rsa3 np@b1.net << EOF
#sudo systemctl restart nginx
#EOF

#rsync -avzh -e "ssh -i ~/.ssh/do_rsa2" /home/notplants/computer/projects/lichen-markdown/lichenmarkdown_ynh/ root@147.182.177.135:/srv/lichenmarkdown_ynh/