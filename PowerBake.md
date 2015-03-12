PowerBake - bake all at once (for 1.2)

Download here:
http://twpug.googlecode.com/files/powerbake.php.zip

  1. Download and extract the file to cake/console/libs/powerbake.php
  1. Try to use this script as bake: cake.php powerbake -working /../app/
  1. You have four options after executing the script
    * M = Generating all models according to tables in your database
    * C = Generating all controllers according to tables in your database
    * V = Generating all views according to tables in your database
    * A = Generating all above according to tables in your database at once

Known problems and limitations:
  1. I haven't had time to figure out how to deal with table relationships automatically.
  1. Test this script in non-production environments, or ... or ...

---Q&A---

  1. Baz wrote:
> After the models are set up, the other "bake all" functions come in more handy. I haven't checked but, I would hope there's an overwrite all in there. That's one thing I don't really like. Maybe prompt me once or use a parameter, but I hate having to punch yes to replace files.

> I don't know if it's a good idea. But you could try to disable line 421 to 432 in cake/console/libs/shell.php. You'll get the results as you wish. :)

```
		if (is_file($path) && $this->interactive === true) {
			$key = $this->in(__("File exists, overwrite?", true). " {$path}",  array('y', 'n', 'q'), 'n');
			if (low($key) == 'q') {
				$this->out(__("Quitting.", true) ."\n");
				exit;
			} elseif (low($key) == 'a') {
				$this->dont_ask = true;
			} elseif (low($key) != 'y') {
				$this->out(__("Skip", true) ." {$path}\n");
				return false;
			}
		}
```