<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use PhpMimeMailParser\Parser;

class EmailParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        $parser = new Parser();

        $parser->setText(request('mail'));

        $headers = $parser->getHeaders();

        $body = $parser->getMessageBody('htmlEmbedded');

        $attachments = $parser->getAttachments();

        $messageId = str_replace('>', '', str_replace('<', '', $parser->getHeader('Message-Id')));

        if (!File::exists($fileName = storage_path('attachments' . DIRECTORY_SEPARATOR . $messageId))) {
            $savedAttachments = $parser->saveAttachments($fileName, true, Parser::ATTACHMENT_RANDOM_FILENAME);
        }

        //dd($savedAttachments);

        return response()->json(['data' => compact('headers', 'body', 'attachments')]);
        //$email = EmailReplyParser::read(request('mail'));
        //
        //dump($email);
        //
        //$email->getFragments()->isHidden();
    }

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
