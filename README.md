# php-rbac

`php-rbac` aims to provide a simple foundation for Role Based Access Control
Systems in PHP.

## Security Principals

A `Security Principal` is an entity that can be authenticated by a computer
system. It can be a user, a computer, a process, or a group of any such things.
In this library, a thing that wants to act as a Security Principal must implement
`BHR\SecurityPrincipalInterface`.

## Securable Resources

A `Securable Resource` is an entity to which access is restricted. It can be
anything from an entire application to a single file, or record. In this
library, a Securable Resource must implement `BHR\SecurableResourceInterface`.
