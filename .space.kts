/**
* JetBrains Space Automation
* This Kotlin script file lets you automate build activities
* For more info, see https://www.jetbrains.com/help/space/automation.html
*/


job("Deploy to VPS") {
	startOn {
		gitPush {
			anyBranchMatching {
        		+"staging"
			}
		}
	}
      
    host("Deploy to VPS") {      
        shellScript {
            content = """
            	echo {{ project:VPS_KEY }} > ssh_key
                chmod 600 ssh_key
            	rsync -avz -e "ssh -i ssh_key" ./* {{ project:VPS_USER }}@{{ project:VPS_HOST }}:/var/www/staging/stream/
            """
        }
    }
}
