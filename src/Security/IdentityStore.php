<?php

namespace SilverStripe\Security;

use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;

/**
 * Represents an authentication handler that can have identities logged into & out of it.
 * For example, SessionAuthenticationHandler is an IdentityStore (as we can write a new member to it)
 * but BasicAuthAuthenticationHandler is not (as it's up to the browser to handle log-in / log-out)
 */
interface IdentityStore
{
    /**
     * Log the given member into this identity store.
     *
     * @param Member $member The member to log in.
     * @param Boolean $persistent boolean If set to true, the login may persist beyond the current session.
     * @param HTTPRequest $request The request of the visitor that is logging in, to get, for example, cookies.
     * @param HTTPResponse $response The response object to modify, if needed.
     */
    public function logIn(Member $member, $persistent, HTTPRequest $request);

    /**
     * Log any logged-in member out of this identity store.
     *
     * @param HTTPRequest $request The request of the visitor that is logging out, to get, for example, cookies.
     * @param HTTPResponse $response The response object to modify, if needed.
     */
    public function logOut(HTTPRequest $request);
}
