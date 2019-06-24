<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class EmailParserCommand
 *
 * @package App\Console\Commands
 *
 * @todo
 *
 * @deprecated
 */
class EmailParserCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parses an incoming email.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fd = fopen('php://stdin', 'r');
        $rawEmail = '';

        while (! feof($fd)) {
            $rawEmail .= fread($fd, 1024);
        }

        fclose($fd);
    }

    ///**
    // * Handle the incoming request.
    // *
    // * @param \Illuminate\Http\Request $request
    // * @param                          $content
    // *
    // * @return \EmailReplyParser\Fragment[]
    // */
    //public function __invoke(Request $request, $content)
    //{
    //    $content = base64_decode($content);
    //
    //    dump($content);
    //
    //    $email = $this->emailParser->parse($content);
    //
    //    dd($email);
    //
    //    $fragments = $email->getFragments();
    //
    //    return $fragments;
    //}

    //Exim
    //If on Exim, open up the file /etc/valiases/peternijssen.nl.
    //Make sure the following line is present within this file:
    //
    //support@peternijssen.nl: “| /usr/bin/php -q /var/www/supportcenter/artisan --env=local email:parse”
    //Run newaliases to rebuild the aliases database.
    //
    //Postfix
    //On Postfix, make sure that the following lines are present and are uncommented in your /etc/postfix/main.cf file before continuing:
    //
    //alias_maps = hash:/etc/aliases
    //alias_database = hash:/etc/aliases
    //If you had to change the file, reload postfix by running service postfix reload
    //
    //We can now create a new alias, which will be piped to our application.
    //Open up /etc/aliases and add the following line:
    //
    //support@peternijssen.nl: "| /usr/bin/php -q /var/www/supportcenter/artisan --env=local email:parse"
    //Run newaliases to rebuild the aliases database.
    //
    //Sendmail
    //With Sendmail you should first create an alias in the /etc/aliases file:
    //
    //support: "| /usr/bin/php -q /var/www/supportcenter/artisan --env=local email:parse"
    //Run newaliases to rebuild the aliases database. Next, make sure the Artisan file is chmod to 755, so it’s executable.
    //
    //Lastly, symlink the artisan file and php itself to /etc/smrsh
    //
    //ln -s /usr/bin/php /etc/smrsh/php
    //ln -s /var/www/supportcenter/artisan /etc/smrsh/pipe.php
}
