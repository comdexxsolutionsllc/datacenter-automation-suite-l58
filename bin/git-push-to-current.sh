#!/usr/bin/env bash

. git-silent

git_silent add --all
git_silent commit --amend --no-edit
git_silent push -f

echo Pushed to current branch.
echo Done.
