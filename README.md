PHP version of get http response undirectly

Think of these situations:
1. A single server wants to call APIs to other servers like facebook google, but GFW makes the communication difficult.
2. A group of servers want to call APIs to other servers, they need to add all there server IPs to whitelist, but your servers are growing everyday, it's impossible to provide a list.

So we got a solution here, we need a server playing the role like a bridge to connect them, of course this server must have access to both sides.
Then our server access other servers through proxy.

Samples will be provided soon.



Coming soon:
What if other servers are difficult to access our servers, we need to expand this proxy server to a callback center server which all the communications go through thhis server, maybe server clusters.
