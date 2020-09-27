# Automotive Dealership Management System

## Mission Statement

To create automotive dealership/workshop system that will run on all major platforms and provide access to all functionality and data through web based application.

## Features

- (in progress) Repair management
- (in progress) Spareparts management
- (in progress) Accounts and contacts management

## Requirements

- Web server
- PHP
- MySQL
- CakePHP 1.3.6 or higher

## Class Diagram

```mermaid
classDiagram
    Contact "1" -- "1.." ContactPhone
    Account "1" -- "1.." Contact
    Account "1" -- "1.." AccountPhone
    RepairOrder "1.." -- "1" Vehicle
    RepairOrder "1" -- "1.." Complaint
    Invoice "1" -- "1.." RepairOrder
    Repair "1" -- "1.." Labour
    Vehicle "1" -- "0..n" Registration
    Registration "1" -- "1" Account
    RepairOrder "1" -- "0..n"  PartTransaction
    PartTransaction "0..n" -- "0..n" Part
    Vehicle "1" -- "1" Type
    Complaint "1..*" -- "0..n" Repair
    Invoice "0..1" -- "0..n" PartTransaction
```