Wordpress Base
============================

Initial setup
-------------

    git clone https://github.com/mickeahlinder/wordpress-base.git
    
Environment setup and deployment
--------------------------------

  1. Set up remote repository on server. And it's recommended to create the repositoy out of the web-root. So for instance on our test-server create on folder for the repository and one for the web-root in the [name].test.phosdev.se folder.
            
        cd [name].test.phosdev.se
        mkdir git-repository && mkdir web
        cd git-repository
        git init --bare

  2. Add the post-receive.sample from the root to the hooks folder in the new repositry and rename to post-receive and make sure it has execute permissions. Configure the WORK_DIR variable in it do point the the web-folder.
    
    Local:

        scp post-receive.sample [user]@test.phosdev.se:/home/sites/../git-repository/hooks/post-receive
        
    On remote server:
        
        chmod +x post-receive
        
  3. Add remotes for the created remote repository to your local development repository.

        git remote add staging ssh://[user]@test.phosdev.se/home/sites/wpbase.test.phosdev.se/git-repository
        
  4. Develop!
  5. Deploy code:
        
        git push staging +staging:refs/heads/staging
     
     This will push the local staging branch to the remote repository where the post-receive hook will take over. It will checkout the newly posted branch to the web-folder configured in it.
